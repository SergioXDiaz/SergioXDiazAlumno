<?php
session_start();
require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Videoclub Retro</title>

<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<header>
<div class="navbar">
    <a href="#" class="logo">🎬 <span>Videoclub Retro</span></a>
    <nav>
        <ul>
            <li><a href="index.php">Películas</a></li>
            <li>
              <li>
   <?php if(!isset($_SESSION['id_usuario'])) { ?>

    <button class="btn-login" onclick="login()">Iniciar sesión</button>

<?php } else { ?>

    <span style="color:white; margin-right:15px;">
        Bienvenido, <?= $_SESSION['nombre'] ?>
    </span>

    
    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] == 1) { ?>
        <a href="modificar.php" class="btn-login" style="background-color:#198754;">
            👤 Usuarios
        </a>

        <a href="modificar_compras.php" class="btn-login" style="background-color:#0d6efd;">
            🛒 Compras
        </a>

        <a href="modificar_peliculas.php" class="btn-login" style="background-color:#6f42c1;">
            🎬 Modificar películas
        </a>
    <?php } ?>

    <a href="logout.php" class="btn-login" style="background-color:#dc3545;">
        🔒 Cerrar sesión
    </a>

<?php } ?>

</li>

            </li>
        </ul>
    </nav>
</div>
</header>

<?php
$sql = "SELECT * FROM peliculas ORDER BY id DESC";
$resultadoPeliculas = mysqli_query($conn, $sql);
?>

<main>
<h2 id="peliculas">Películas disponibles</h2>
<section class="peliculas">
<?php
if ($resultadoPeliculas && mysqli_num_rows($resultadoPeliculas) > 0) {
    while ($p = mysqli_fetch_assoc($resultadoPeliculas)) {
        ?>
        <div class="pelicula">
            <img src="<?php echo htmlspecialchars($p['imagen']); ?>">
            <h3><?php echo htmlspecialchars($p['titulo']); ?></h3>
            <p>Género: <?php echo htmlspecialchars($p['genero']); ?></p>

            <?php if(isset($_SESSION['id_usuario'])) { ?>
                <button class="btn-comprar"
                        onclick="agregarAlCarrito('<?php echo addslashes($p['titulo']); ?>')">
                    Comprar
                </button>
            <?php } ?>
        </div>
        <?php
    }
} else {
    echo "<p>No hay películas disponibles.</p>";
}
?>
</section>

</main>

<!-- Carrito visible solo si usuario logueado -->
<?php if(isset($_SESSION['id_usuario'])): ?>
<div id="carrito">
    <h4>Carrito</h4>

    <ul id="lista-carrito"></ul>

    <input
        type="text"
        id="direccion"
        placeholder="Dirección de envío"
        style="width:100%; margin:8px 0; padding:6px;"
    >

    <button onclick="confirmarCompra()">Confirmar compra</button>
    <button onclick="vaciarCarrito()">Vaciar carrito</button>
</div>
<?php endif; ?>


<footer>
    <p>© 2026 Videoclub Retro</p>
</footer>


<script>
function login() {
    window.location.href = "login.php";
}

let carrito = [];

// Añadir película al carrito
function agregarAlCarrito(pelicula) {
    if (!carrito.includes(pelicula)) {
        carrito.push(pelicula);
        actualizarCarrito();
    }
}

// Confirmar compra
function confirmarCompra() {
    if (carrito.length === 0) {
        alert("El carrito está vacío");
        return;
    }

    const direccion = document.getElementById("direccion").value.trim();

    if (direccion === "") {
        alert("Introduce la dirección de envío");
        return;
    }

    
    const datos = new URLSearchParams();
    datos.append("direccion", direccion);
    carrito.forEach(p => datos.append("peliculas[]", p));

    fetch("confirmar_compra.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: datos.toString()
    })
    .then(res => res.text())
    .then(data => {
        if (data === "OK") {
            alert("Compra realizada correctamente");
            carrito = [];
            document.getElementById("direccion").value = "";
            actualizarCarrito();
        } else {
            alert(data);
        }
    });
}

// Vaciar carrito
function vaciarCarrito() {
    carrito = [];
    actualizarCarrito();
}

// Mostrar carrito
function actualizarCarrito() {
    const lista = document.getElementById("lista-carrito");
    lista.innerHTML = "";

    carrito.forEach((pelicula, index) => {
        const li = document.createElement("li");
        li.textContent = pelicula;
        lista.appendChild(li);
    });
}
</script>

</body>
</html>
