<?php

namespace SQLgreyGUI\Models;

class AwlEmail extends SQLgreyConnection
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'from_awl';

    /**
     * fillable attributes
     * 
     * @var array
     */
    protected $fillable = array(
        'sender_name',
        'sender_domain',
        'src',
        'first_seen',
        'last_seen',
    );

    /**
     * validation rules
     * 
     * @var array 
     */
    public static $rules = array(
        'sender_name' => 'required',
        'sender_domain' => 'required',
        'src' => 'required',
    );

    /**
     * get sender name
     * 
     * @return string
     */
    public function getSenderName()
    {
        return $this->sender_name;
    }

    /**
     * get sender domain
     * 
     * @return string
     */
    public function getSenderDomain()
    {
        return $this->sender_domain;
    }

    /**
     * get source
     * 
     * @return string
     */
    public function getSource()
    {
        return $this->src;
    }

    /**
     * get first seen
     * 
     * @return string
     */
    public function getFirstSeen()
    {
        return $this->first_seen;
    }

    /**
     * get last seen
     * 
     * @return string
     */
    public function getLastSeen()
    {
        return $this->first_seen;
    }

}
