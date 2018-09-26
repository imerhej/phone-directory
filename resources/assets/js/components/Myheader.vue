<template>
<nav class="navbar" role="navigation" aria-label="main navigation">
	  <div class="navbar-brand dark">
	    <a class="navbar-item" href="http://webstitching.com">
	      <img src="http://webstitching.com/image/weblogo.png" alt="Webstitching" width="112" height="28">
	    </a>

		<div class="navbar-menu is-active">
			<router-link to="/home" class="navbar-item">Home</router-link>
    		<router-link to="/about" class="navbar-item">About</router-link>
    		<router-link to="/services" class="navbar-item">Services</router-link>
		</div>
	    

	    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	      <span aria-hidden="true"></span>
	    </a>
	  </div>
</nav>
</template>