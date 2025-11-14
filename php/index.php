<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELBASK - Iniciar Sesión</title>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #1a1a1a; display: flex; justify-content: center; align-items: center; min-height: 100vh; color: #cccccc;">

    <div style="background-color: #2b2b2b; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6); max-width: 450px; width: 90%; border: 3px solid #5e10b1; text-align: center;">
        
        <h1 style="font-size: 36px; font-weight: bold; letter-spacing: 3px; margin-bottom: 5px; background: linear-gradient(90deg, #6d28d9 0%, #4c0099 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: 0 0 10px rgba(94, 16, 177, 0.5);">
            ELBASK
        </h1>
        <p style="color: #999; margin-bottom: 30px; font-size: 14px;">Básquetbol Internacional</p>

        <div style="display: flex; justify-content: space-around; margin-bottom: 25px;">
            <span id="tab-login" style="font-size: 18px; font-weight: bold; color: #fff; cursor: default; border-bottom: 3px solid #6d28d9; padding-bottom: 5px;">INICIAR SESIÓN</span>
            
            <a href="../php/indexregister.php" id="tab-register" 
                style="font-size: 18px; font-weight: bold; color: #999; cursor: pointer; text-decoration: none; border-bottom: 3px solid transparent; padding-bottom: 5px; transition: color 0.3s ease;"
                onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#999'">
                REGISTRARSE
            </a>
            </div>

        <form action="../php/procesar_login.php" method="post" id="login-form">
            
            <label for="Usuario" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">USUARIO:</label>
            <input type="text" id="Usuario" name="username" required
                style="width: calc(100% - 20px); padding: 12px 10px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff; transition: border-color 0.3s ease;"
                onfocus="this.style.borderColor='#6d28d9'" onblur="this.style.borderColor='#5e10b1'">

            <label for="contraseña" style="display: block; text-align: left; margin-top: 20px; font-weight: bold; color: #fff; font-size: 14px;">CONTRASEÑA:</label>
            <input type="password" id="contraseña" name="password" required
                style="width: calc(100% - 20px); padding: 12px 10px; margin-top: 8px; font-size: 16px; border: 2px solid #5e10b1; border-radius: 8px; background-color: #1a1a1a; color: #fff; transition: border-color 0.3s ease;"
                onfocus="this.style.borderColor='#6d28d9'" onblur="this.style.borderColor='#5e10b1'">

            <button type="submit"
                style="margin-top: 30px; padding: 15px; width: 100%; background: linear-gradient(90deg, #6d28d9 0%, #5e10b1 100%); color: white; font-size: 16px; border: none; border-radius: 10px; cursor: pointer; font-weight: bold; box-shadow: 0 4px 15px rgba(94, 16, 177, 0.4); transition: all 0.3s ease;"
                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(94, 16, 177, 0.6)'" 
                onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(94, 16, 177, 0.4)'">
                ACCEDER A TU PAGINA DEL FUTURO BASKETBALL
            </button>
        </form>

        <div style="text-align: center; margin-top: 15px;">
            <a href="#" style="color: #6d28d9; text-decoration: none; font-size: 14px; font-weight: bold;"
                onmouseover="this.style.color='#7c3aed'" onmouseout="this.style.color='#6d28d9'">
                ¿Olvidaste tu contraseña?
            </a>
        </div>
        
    </div>

    <div style="position: absolute; bottom: 15px; font-size: 12px; color: #4c0099; font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
        &copy; 2025 ELBASK
    </div>
    
</body>
</html>