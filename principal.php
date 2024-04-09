<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Formulario de Tarjeta de Crédito Dinámico</title>
	<link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
		<nav class="full-box NavBar">
		<div class="full-box NavBar-logo">
			<figure class="full-box">
				<img src="assets/img/logo.png" alt="Acodjar" class="img-responsive">
			</figure>	
		</div>
		<ul class="full-box list-unstyled text-right NavBar-navigation">
			<li>
				<a href="" class="text-condensed"><?php echo $_SESSION['nombre'] ?></a>
			</li>
			<li>
				<a href="salir.php" class="text-condensed">Cerrar sesion</a>
			</li>
		</ul>
		<span class="glyphicon glyphicon-option-vertical visible-xs btn-mobile-menu" aria-hidden="true"></span>
	</nav>
	<div class="contenedor">
		<section class="tarjeta" id="tarjeta">
			<div class="delantera">
				<div class="logo-marca" id="logo-marca">
				</div>
				<img src="assets/img/chip-tarjeta.png" class="chip" alt="">
				<div class="datos">
					<div class="grupo" id="numero">
						<p class="label">Número Tarjeta</p>
						<p class="numero">#### #### #### ####</p>
					</div>
					<div class="flexbox">
						<div class="grupo" id="nombre">
							<p class="label">Nombre Tarjeta</p>
							<p class="nombre"><?php echo $_SESSION['nombre'] ?></p>
						</div>

						<div class="grupo" id="expiracion">
							<p class="label">Expiracion</p>
							<p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
						</div>
					</div>
				</div>
			</div>

			<div class="trasera">
				<div class="barra-magnetica"></div>
				<div class="datos">
					<div class="grupo" id="firma">
						<p class="label">Firma</p>
						<div class="firma"><p></p></div>
					</div>
					<div class="grupo" id="ccv">
						<p class="label">CCV</p>
						<p class="ccv"></p>
					</div>
				</div>
				<p class="leyenda">Comienza a darle un nuevo sentido a tu dinero con el mejor banco que hay Banorte</p>
				<a href="#" class="link-banco">www.banorte.com</a>
			</div>
		</section>

		<div class="contenedor-btn">
			<button class="btn-abrir-formulario" id="btn-abrir-formulario">
				<i class="fas fa-plus"></i>
			</button>
		</div>

		<!-- Formulario -->
		<form action="" id="formulario-tarjeta" class="formulario-tarjeta">
			<div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="text" id="inputNumero" maxlength="19" autocomplete="off">
			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
				<input type="text" id="inputNombre" maxlength="100" autocomplete="off">
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes">
								<option disabled selected>Mes</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear">
								<option disabled selected>Año</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="text" id="inputCCV" maxlength="3">
				</div>
			</div>
			<button type="submit" class="btn-enviar">Enviar</button>
		</form>
	</div>


	<body class="p-3 m-0 border-0 bd-example m-0 border-0">

	<div class="card">
      <div class="card-body">
      <center>
      <p>
  <a class="btn btn-outline-success col-3 mx-auto" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Encriptado llave publica</a>
  <button class="btn btn-outline-success col-3 mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Firma digital</button>




<?php
$privateKey = '-----BEGIN PRIVATE KEY-----
MIIEuwIBADANBgkqhkiG9w0BAQEFAASCBKUwggShAgEAAoIBAQCmDqYGG6a7FyTB
X8zRebILdlTpkHNT/v/TX58TjyWPQbotifhf73Go7SQIcOuaYijJmKlvMYx0rC9u
eQ6/h6xbGWcCP4B7Y1NHLuHW3QzJypiGqw3je2oHejm339Vx10AhVCpc4sIqDPqi
Oug6W8oZWOzGvmaJS49FGn2iz1+tv7/GRG0DuZAGYcMXtnr+f34Wexi1/c8Hqkrc
fVeSNKB/Hodn596GF919+gsQAPjz9pb1lcHPh5Z3gMenehtSdbaB8VghNgfIXtE8
ZYHwiCbiqRCYEIuZXgONUl95cztXwaE3J0dzh0yI5U81T1Cg5yzVaKKTPbfyjzfi
IaFeZleVAgMBAAECgf84L9FUChOHiN/D0I/FQKxB3ecbOTrlYGkaz+MaLK4bWWIC
bdgKCVObfC5De10kBu13rBlV40K1u7ZpoIhfCDR46PQdHyGJljEI+6BiZ/FpuQyc
tgY9BQ+O56EHNVBT/O6jgZ8/PheyigArXBnxhBk+8hvx4V3lEp2GiGnt6LS/VQMr
qN916UzopU/32fj1+CzvZGp4aXhN/2dUKau+6/EVutbUonNMJUnOZ71W0O0wbQ4y
puheBMZr7JttACjX2+8ZfsJXOgm+Y1ZmW4lVZu1JXgzUv7uqsfHshzbMYChgsGdB
DPT8JqtuOCpP7z3wLYLyCWvYSOsKVLCulQeK5ckCgYEA5rc9AigW5atgKQjYMeku
avGQLN4J4cBjk4FN2Tdv8qd6RH5Ntdk4bGw+cFulyB9hk+EnF+7uy5E34ykg3Kes
NirpLU1vtESB88RcXAJlAkSfQ45gX6brQTZqFzBoaqEujYFU/kkvkOD868kaPRM5
KJ7koXuUHgDONd53aMgX3wkCgYEAuEFn6WTvzp07oJXnWdJAuhjGzOJaQWQ2A0F8
qzfRBN1Ouzz0lqe6FDAGl9xybiOxlLhkb88I0fzvBn6yj3kJy99bVgvlz8DbjXc4
jSlzbqjxSCAjPjDRw64NRRqQM1P/VZB9mYwfsgYwXpwtDRC9xr0VBbVbspS1oAsC
5t+Yyy0CgYAaSWhnFYA+XL9RDZPsY+AJCUrfAdFoak4uIT5ocFuN7y0MHsPl40D9
gXu/u4FxArpQagfVP0Dv6rTOagI3gdcqOMtmgPsoM+IGjynixdcSYhUvUkqCu3b0
cCm4SKis9X5jWwf/DQGhZTEMAFa//K+3hBsSlwzyOi9EjftW8e1eWQKBgQCc3bpM
vs1W9w/TqKu9Eb5fcUaXGcJDV8CQRwmPb0a5QHyN9dg6BvPpyfVjBqA5WpQODGod
soJM3GzW97inYyHO+wp0mE5/8C47Ixv3Oin3NUet4wZ+JOwBD0Zm5bWMrV99hjUY
K260joZRld7Y977J2yJxqLQ3tllmttkym3wmxQKBgGXmWOZxQuYOi1Xl48PL1tWK
24yrKLyoyjywq4IkLNyGo2j/5MSVQcxB6Oif/3cE+VoBrPsHBijfUZEz+Xvg064z
AN5jvWg/bLffCdDkUzYBzaVJfEAJnY4pJzR7BVEiDmKCEhmcKTitOAV21IYaDUvV
DIljNxvVJXdV6E5XEPkY
-----END PRIVATE KEY-----' ;


$publicKey = '-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApg6mBhumuxckwV/M0Xmy
C3ZU6ZBzU/7/01+fE48lj0G6LYn4X+9xqO0kCHDrmmIoyZipbzGMdKwvbnkOv4es
WxlnAj+Ae2NTRy7h1t0MycqYhqsN43tqB3o5t9/VcddAIVQqXOLCKgz6ojroOlvK
GVjsxr5miUuPRRp9os9frb+/xkRtA7mQBmHDF7Z6/n9+FnsYtf3PB6pK3H1XkjSg
fx6HZ+fehhfdffoLEAD48/aW9ZXBz4eWd4DHp3obUnW2gfFYITYHyF7RPGWB8Igm
4qkQmBCLmV4DjVJfeXM7V8GhNydHc4dMiOVPNU9QoOcs1Wiikz238o834iGhXmZX
lQIDAQAB
-----END PUBLIC KEY-----';

//data enviada
$data = [
    'order_id' => 'N2020020212345689232',
    'money' => 1000000,
    'user_id' => 1982,
    'pay_type' => 'alipay',
    'pay_time' => 1583213421
];

//Encriptado llave publica 
$publicKeyResource = openssl_pkey_get_public($publicKey);
$rs = openssl_public_encrypt(json_encode($data), $encrypted, $publicKeyResource) ? base64_encode($encrypted) : null;

?>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <?php echo "Encriptado llave publica: <br>".$rs."<br>";?>
      </div>
    </div>
  </div>




  <?php
//generacion de firma
$privateKeyResource = openssl_pkey_get_private($privateKey);
openssl_sign(json_encode($data), $signature, $privateKeyResource, OPENSSL_ALGO_SHA256);
$signature = base64_encode($signature);
?>


<div class="col">
<br>
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">

      <?php echo "Firma digital: <br>".$signature;?>  <?php echo "<hr color= 'red'>";

//data recibida
$data = [
    'order_id' => 'N2020020212345689232',
    'money' => 1000000,
    'user_id' => 1982,
    'pay_type' => 'alipay',
    'pay_time' => 1583213421
];

//verificamos firma
$publicKeyResource = openssl_pkey_get_public($publicKey);
$rs = openssl_verify(json_encode($data), base64_decode($signature), $publicKeyResource, OPENSSL_ALGO_SHA256);

//Validamos firma
if ($rs) {
    echo 'ok';
} else {
    echo 'fail...';
}
?> 

</center>
      </div>
    </div>
  </div>
</div>



<?php echo "<hr color= 'red'>";

?>



</div>
    </div>

  </body>
</html>













	<span class="glyphicon glyphicon-option-vertical visible-xs btn-mobile-menu" aria-hidden="true"></span>
	</nav>
	<section class="full-box section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<h2 class="text-center text-titles">Contáctenos</h2>
					<p class="text-center lead">
						Recibe atención inmediata de un ejecutivo las 24 horas, los 7 días de la semana al marcar a nuestra Línea Preferente (81 81564444) o, si lo prefieres, contáctanos o programa tu llamada a través de Banorte Móvil
					</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<form action="">
						<div class="form-group">
						    <label for="form-name">Nombre</label>
						    <input type="text" class="form-control" id="form-name" placeholder="Nombre" required="">
						</div>
						<div class="form-group">
						    <label for="form-email">Correo electrónico</label>
						    <input type="email" class="form-control" id="form-email" placeholder="Correo electrónico" required="">
						</div>
						<div class="form-group">
						    <label for="form-msj">Mensaje</label>
						    <textarea class="form-control" id="form-msj" rows="3" placeholder="Mensaje" required=""></textarea>
						</div>
						<p class="text-center">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</p>
					</form>
				</div>
			</div>
			<br>
			
		</div>
	</section>
	<footer class="full-box footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<ul class="list-unstyled text-center social-icons">
						<li>
							<a href="#!">
								<i class="fa fa-facebook" aria-hidden="true" style="background-color: #2B3990;"></i>
							</a>
						</li>
						<li>
							<a href="#!">
								<i class="fa fa-twitter" aria-hidden="true" style="background-color: #26A9E0;"></i>
							</a>
						</li>
						<li>
							<a href="#!">
								<i class="fa fa-youtube" aria-hidden="true" style="background-color: #EC1B23"></i>
							</a>
						</li>
						<li>
							<a href="#!">
								<i class="fa fa-instagram" aria-hidden="true" style="background-color: #32689C"></i>
							</a>
						</li>
						<li>
							<a href="#!" aria-hidden="true" style="background-color: #BE1D2C"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12">
					<p class="text-center text-condensed">
						Copyright &copy; Grettel-Vanessa-Sebastian
				</div>
			</div>
		</div>
	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>




	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>





	<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script>
// Definición del bloque
class Block {
    constructor(index, timestamp, data, previousHash = '') {
        this.index = index;
        this.timestamp = timestamp;
        this.data = data;
        this.previousHash = previousHash;
        this.hash = this.calculateHash();
    }

    calculateHash() {
        return CryptoJS.SHA256(this.index + this.previousHash + this.timestamp + JSON.stringify(this.data)).toString();
    }
}

// Definición de la blockchain
class Blockchain {
    constructor() {
        this.chain = [this.createGenesisBlock()];
    }

    createGenesisBlock() {
        return new Block(0, "05/04/2024", "Genesis block", "0");
    }

    getLatestBlock() {
        return this.chain[this.chain.length - 1];
    }

    addBlock(newBlock) {
        newBlock.previousHash = this.getLatestBlock().hash;
        newBlock.hash = newBlock.calculateHash();
        this.chain.push(newBlock);
    }

    isChainValid() {
        for (let i = 1; i < this.chain.length; i++) {
            const currentBlock = this.chain[i];
            const previousBlock = this.chain[i - 1];

            if (currentBlock.hash !== currentBlock.calculateHash()) {
                return false;
            }

            if (currentBlock.previousHash !== previousBlock.hash) {
                return false;
            }
        }
        return true;
    }
}

// Uso de la blockchain
let myBlockchain = new Blockchain();
myBlockchain.addBlock(new Block(1, "04/04/2024", { amount: 4 }));
myBlockchain.addBlock(new Block(2, "05/04/2024", { amount: 10 }));

console.log('Is blockchain valid? ' + myBlockchain.isChainValid());
console.log(JSON.stringify(myBlockchain, null, 4));


</script>







</body>
</html>