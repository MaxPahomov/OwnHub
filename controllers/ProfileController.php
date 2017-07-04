<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 04.07.17
 * Time: 11:53
 */

namespace app\controllers;


use app\models\Profile;
use yii\web\Controller;

class ProfileController extends Controller
{
    public function actionSettings(){
        $profiledate = Profile::find()->where(['user_id' => \Yii::$app->user->id])->one();
        if($profiledate->load(\Yii::$app->request->post())) {
            $profiledate->update();
        }
        return $this->render('settings', [
            'profiledate' => $profiledate,
        ]);
    }

}