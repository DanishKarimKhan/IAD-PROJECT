<?php

namespace frontend\models;

use common\models\User;

use Yii;

/**
 * This is the model class for table "tweet".
 *
 * @property integer $tweet_id
 * @property string $tweet_content
 * @property integer $tweet_time
 * @property integer $tweet_user
 * @property string $tweet_image
 *
 * @property User $tweetUser
 */
class Tweet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tweet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tweet_content', 'tweet_time', 'tweet_user'], 'required'],
            [['tweet_content'], 'string'],
            [['tweet_time', 'tweet_user'], 'integer'],
            [['tweet_image'], 'string', 'max' => 535],
            [['tweet_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['tweet_user' => 'id']],
            [['tweet_image'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tweet_id' => 'Tweet ID',
            'tweet_content' => 'Tweet Content',
            'tweet_time' => 'Tweet Time',
            'tweet_user' => 'Tweet User',
            'tweet_image' => 'Tweet Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTweetUser()
    {
        return $this->hasOne(User::className(), ['id' => 'tweet_user']);
    }
}
