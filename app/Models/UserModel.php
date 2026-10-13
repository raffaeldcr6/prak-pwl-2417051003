<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }

    public function store(Request $request)
{
    $this->userModel->create([
        'nama'     => $request->input('nama'),
        'nim'      => $request->input('nim'), // Pastikan di sini 'nim'
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->to('/user');
}
}