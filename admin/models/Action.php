<?php

/**
 * This is the model class for table "actions".
 *
 * The followings are the available columns in table 'actions':
 * @property integer $id
 * @property string $title
 * @property integer $charity
 * @property string $mainDesc
 * @property string $description
 * @property string $keywords
 * @property string $shortDesc
 * @property string $why
 * @property string $say
 * @property string $start
 * @property string $end
 * @property string $use
 * @property integer $available
 * @property integer $free
 * @property integer $maxInHead
 * @property integer $max
 * @property integer $min
 * @property integer $minActions
 * @property integer $city
 * @property integer $category
 * @property string $created
 * @property integer $active
 * @property string $term
 */
class Action extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'actions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, title, mainDesc, description, shortDesc, why, say, start, created, term', 'required'),
			array('id, charity, available, free, maxInHead, max, min, minActions, city, category, active', 'numerical', 'integerOnly'=>true),
			array('title, keywords', 'length', 'max'=>255),
			array('end, use', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, charity, mainDesc, description, keywords, shortDesc, why, say, start, end, use, available, free, maxInHead, max, min, minActions, city, category, created, active, term', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Название',
			'charity' => 'Акция благотворительная',
			'mainDesc' => 'Описание для главной',
			'description' => 'Описание акции',
			'keywords' => 'Ключевые слова',
			'shortDesc' => 'Краткое описание',
			'why' => 'Почему это надо',
			'say' => 'Дон купон говорит',
			'start' => 'Старт',
			'end' => 'Окончание',
			'use' => 'Использовать до',
			'available' => 'Сертификат доступен сразу',
			'free' => 'Бесплатная акция',
			'maxInHead' => 'Максимум в одни руки',
			'max' => 'Максимум покупок',
			'min' => 'Минимум покупок',
			'minActions' => 'Минимум участий в акциях ',
			'city' => 'Город',
			'category' => 'Категория',
			'created' => 'Created',
			'active' => 'Активна',
			'term' => 'Условия',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('charity',$this->charity);
		$criteria->compare('mainDesc',$this->mainDesc,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('keywords',$this->keywords,true);
		$criteria->compare('shortDesc',$this->shortDesc,true);
		$criteria->compare('why',$this->why,true);
		$criteria->compare('say',$this->say,true);
		$criteria->compare('start',$this->start,true);
		$criteria->compare('end',$this->end,true);
		$criteria->compare('use',$this->use,true);
		$criteria->compare('available',$this->available);
		$criteria->compare('free',$this->free);
		$criteria->compare('maxInHead',$this->maxInHead);
		$criteria->compare('max',$this->max);
		$criteria->compare('min',$this->min);
		$criteria->compare('minActions',$this->minActions);
		$criteria->compare('city',$this->city);
		$criteria->compare('category',$this->category);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('term',$this->term,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Action the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
