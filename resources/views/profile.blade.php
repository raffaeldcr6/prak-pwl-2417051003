<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card-container {
            background-color: #ffffff;
            width: 100%;
            max-width: 380px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            padding: 30px 20px;
            text-align: center;
        }

        .avatar-box {
            width: 120px;
            height: 120px;
            margin: 0 auto 25px;
            border-radius: 50%;
            border: 4px solid #764ba2;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .avatar-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .info-box {
            background-color: #f1f5f9;
            padding: 12px 15px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 600;
            color: #334155;
            transition: transform 0.2s, background-color 0.2s;
        }

        .info-box:hover {
            transform: translateY(-2px);
            background-color: #e2e8f0;
        }

        .label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
            margin-bottom: 4px;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <div class="card-container">
        <div class="avatar-box">
            <img src="{{ asset('foto-profile.jpg') }}" alt="Foto Profile">
        </div>

        <div class="info-group">
            <div class="info-box">
                <div class="label">Nama</div>
                <div>Muhamad Raffael Ramadhani</div>
            </div>

            <div class="info-box">
                <div class="label">NPM</div>
                <div>2417051003</div>
            </div>

            <div class="info-box">
                <div class="label">Kelas</div>
                <div>ILKOM B</div>
            </div>
        </div>
    </div>

</body>
</html>