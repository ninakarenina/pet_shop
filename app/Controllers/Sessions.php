<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SessionsModel;

class Sessions extends BaseController
{
    public static $COOKIE_NAME = "X-SESSION";
    protected SessionsModel $sessionsModel;
    protected UsersModel $usersModel;
    public function __construct()
    {
        $this->sessionsModel = new SessionsModel();
        $this->usersModel = new UsersModel();
    }
    public function create($userId)
    {
        $model = [
            'id' => uniqid(),
            'id_users' => $userId
        ];
        // dd($model);
        // $this->sessionsModel->save($model);
        
        try {
            $this->sessionsModel->save($model);
            // $this->db->table('sessions')->insert($model);
            setcookie(self::$COOKIE_NAME, $model['id'], time()+(60*60*24*30),'/');
            echo "Data berhasil disimpan.";
            exit();
        } catch (\Exception $e) {
            echo "Gagal menyimpan data: " . $e->getMessage();
            exit();
        }
        
        // setcookie(self::$COOKIE_NAME, $model['id'], time()+(60*60*24*30),'/');
        // return $session;
    }
    public function destroy()
    {
        $id = $_COOKIE[self::$COOKIE_NAME] ?? '';
        $this->sessionsModel->delete($id);
        setcookie(self::$COOKIE_NAME, '', 1, '/');
    }
    public function current()
    {
        $id = $_COOKIE[self::$COOKIE_NAME] ?? '';
        // dd($id);
        $session = $this->sessionsModel->find($id);
        // dd($session);

        if($session == null){
            return null;
        }else{
            return $this->usersModel->find($session['id_user']);
        }
    
    }
}
