<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:user,nim',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        UserModel::create([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil ditambahkan!');
    }

    // --- TAMBAHKAN METHOD EDIT, UPDATE, DAN DESTROY DI BAWAH INI ---

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);
        $user->update([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();

        return redirect()->to('/user')->with('success', 'Data user berhasil dihapus!');
    }
}