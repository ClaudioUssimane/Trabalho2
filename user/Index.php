<?php 
include_once ("../db.php");
include_once ("../header.php");
?>


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="home.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="user/index.php">
          <i class="bi bi-menu-button-wide"></i><span>Usuario</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="user/index.php">
              <i class="bi bi-circle"></i><span>Usuario</span>
            </a>
          </li>
          <li>
            <a href="pages-register.php">
              <i class="bi bi-circle"></i><span>Add Usuario</span>
            </a>
          </li>
          <li>
        <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="home.php">
          <i class="bi bi-layout-text-window-reverse"></i><span>Usuarios</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html" class="active">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Coleção de Usuarios</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Usuarios</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista de Usuarios</h5>
              <p>Adicione o seu usuario na sua tabela, em base de dados, caso tambem se arrependa ou falhe, pode clicar nos Botões (editar ou apagar) e adicione de novo. Obrigado!</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Contacto</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Username</th>
                  
				<th> Acção </th>
                        </tr> 
                </thead>
				<tbody>
                <?php 
							 // faz a seleção do dados na Tabela	
								$data = mysqli_query($conectar, "SELECT * FROM users");
							 // lista os dados
								while($value = mysqli_fetch_array($data)){
									
							/* PDO
								$stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
								$stmt->execute();
								$values = $stmt->fetchAll();
								
								foreach($values as $value) {
							*/	
											
							?>	
				
				
				
				
				
		
		
		     
                        <tr class="table-info">
                          <td> <?php echo $value['id'] ?></td>
                          <td> <?php echo $value['name'] ?> </td>
                          <td> <?php echo $value['contact'] ?> </td>
                          <td> <?php echo $value['email'] ?></td>
                          <td> <?php echo $value['username'] ?> </td>
						  
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> - 
							<a class="btn btn-sm btn-danger " href="user/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td>
                        </tr>
						<?php  }?>	
                      </tbody>
                   
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<?php 
include_once ("../footer.php");
?>
</html>