<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">CodeIgniter CRUD Application with BootStrap</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-badge="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br><br>
<div class="container">
<h3>View All Posts</h3>
<?php echo anchor('welcome/create', 'Add Post', ['class'=>'btn btn-primary']);?>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Creation Date</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count((array)$posts)):?>
	<?php foreach($posts as $post):?>
    <tr class="table-active">
      <td><?php echo $post->title;?></td>
      <td><?php echo $post->description;?></td>
      <td><?php echo $post->date_created;?></td>
      <td> 
	  	<?php echo anchor("welcome/view/{$post->id}", 'View', ['class'=>'badge badge-info']);?>
		  <?php echo anchor("welcome/update/{$post->id}", 'Update', ['class'=>'badge badge-success']);?>
	  	<?php echo anchor("welcome/delete/{$post->id}", 'Delete', ['class'=>'badge badge-danger']);?>
	  </td>
    </tr>
	<?php endforeach;?>
	<?php else: ?>
		<tr>
			<td> No Records Found!</td>
		</tr>
	<?php endif;?>
  </tbody>
</table>


</body>
</html>