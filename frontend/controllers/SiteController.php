<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use common\models\LoginForm;
use frontend\models\VBeritaInstansi;
use frontend\models\VBeritaKota;
use frontend\models\VLinkTerkait;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $id_instansi = 'G09018';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * {@inheritdoc}
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
     * @return mixed
     */
    public function actionIndex()
    {
        $berita_instansi_limit = VBeritaInstansi::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->limit(5)
            ->all();
        //SELECT * FROM `v_berita_instansi` WHERE instansi_id='G09018' AND instansi_berita='ON' ORDER by tanggal_berita DESC

        $berita_instansi = VBeritaInstansi::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->all();

        $berita_utama_instansi = VBeritaInstansi::find()
            ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON',
                    'utama_instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->all();

        $slideractive = VBeritaInstansi::find()
             ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON',
                    'utama_instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->limit(1)
            ->all();

        $slideritem = VBeritaInstansi::find()
             ->where([
                    'instansi_id' => 'G09018',
                    'instansi_berita' => 'ON',
                    'utama_instansi_berita' => 'ON'
                ])
            ->orderBy('tanggal_berita DESC')
            ->limit(4)
            ->offset(1)
            ->all();

        /*$berita = new ActiveDataProvider ([
            'query' => VBeritaInstansi::find()
                ->where(['instansi_id' => 'G09018', 'instansi_berita' => 'ON'])
                ->orderBy('tanggal_berita DESC'),
            'pagination' => ['pagesize' => 1,]
        ]);*/

        return $this->render('index', [
            'berita_instansi_limit' => $berita_instansi_limit,
            'berita_instansi'       => $berita_instansi,
            'berita_utama_instansi' => $berita_utama_instansi,
            'slideractive'          => $slideractive,
            'slideritem'            => $slideritem,
            /*'berita' => $berita*/
        ]);
    }

    public function actionDetailBerita($id)
    {
        return $this->render('detail_berita', ['detail' => $this->findModel($id),]);
    }

    public function actionFooter()
    {
        /*$linkterkait = new ActiveDataProvider(['query' => VLinkTerkait::find()->where(['instansi_id' => 'GO9018'])->orderBy('urutan_link ASC')]);*/


        $linkterkait = VLinkTerkait::find()
            ->where([
                    'instansi_id' => 'G09018',
                ])
            ->orderBy('urutan_link ASC')
            ->all();

        $this->view->params['linkterkait'] = $linkterkait;

        return $this->render('index', [
            'linkterkait' => $linkterkait
            /*'berita' => $berita*/
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
