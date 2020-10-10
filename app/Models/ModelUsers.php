<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model
{
  protected $table = 'users';
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
  // protected $allowedFields = ['nama', 'slug', 'username', 'password', 'level'];
  protected $allowedFields = ['name', 'email', 'email_verified_at', 'password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token', 'current_team_id', 'profile_photo_path'];

  public function getUsers($slug = false)
  {
    if ($slug == false) {
      return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
  }