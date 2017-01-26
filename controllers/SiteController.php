<?php

namespace app\controllers;

use Yii;
use yii\helpers\Html;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\MyForm;
use app\models\Comments;
use app\models\Posts;
use app\models\Courses;
use yii\data\Pagination;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Posts::find()->where(['hide' => 0]);
        $pagination = new Pagination([
           'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $posts = $query->orderBy(['date' => SORT_DESC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        Posts::setNumbers($posts);

        return $this->render('index', [
            'posts' => $posts,
            'active_page' => Yii::$app->request->get("page", 1),
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function actionAuthor()
    {
        return $this->render('author');
    }

    public function actionVideo()
    {
        $coures = Courses::find()->orderBy(['id'] => SORT_DESC)->all();

        return $this->render([
            'courses' => $courses
        ]);
    }
}
