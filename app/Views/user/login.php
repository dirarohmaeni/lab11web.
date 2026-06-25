<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
        }
        .login-box {
            width: 350px;
            margin: 100px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        button {
            padding: 10px;
            width: 100%;
            background: #2c6fb7;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <?php if(session()->getFlashdata('error')): ?>
        <p style="color:red;">
            <?= session()->getFlashdata('error') ?>
        </p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>