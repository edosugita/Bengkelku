<?php

namespace App\Models;

use CodeIgniter\Model;

class UserReview extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id_review';
    protected $createdField = 'tgl';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_bengkel', 'id', 'komentar', 'rating'];

    public function get_Review($slug)
    {
        return $this->db->table('review')
            ->join('bengkel', 'review.id_bengkel = bengkel.id_bengkel')
            ->join('users', 'review.id = users.id')
            ->where(['bengkel.slug' => $slug])
            ->get()->getResultArray();
    }

    public function getRating($slug = false)
    {
        return $this->db->table('review')
            ->join('bengkel', 'review.id_bengkel = bengkel.id_bengkel')
            ->join('users', 'review.id = users.id')
            ->selectAvg('rating')
            ->where(['bengkel.slug' => $slug])
            ->get()->getResultArray();
    }
}
