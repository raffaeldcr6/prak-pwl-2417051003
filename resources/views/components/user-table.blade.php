@props(['users'])

<div class="table-responsive shadow-sm rounded border">
    <table class="table table-striped table-hover align-middle mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col" class="text-center" style="width: 10%;">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM / NIM</th>
                <th scope="col">Kelas</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td class="text-center fw-bold">{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td><span class="badge bg-secondary">{{ $user->nim }}</span></td>
                    <td><span class="badge bg-primary">{{ $user->nama_kelas }}</span></td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>