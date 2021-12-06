<main class="form-signin">
<form method="post" id="frmSubmit">
		<img 
			class="mb-4" 
			src="assets/images/bootstrap-logo.svg" 
			alt="logo" 
			width="72" 
			height="57" 
		/>
		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
		<div class="form-floating">
			<input 
				type="email" 
				class="form-control" 
				name="email"
				id="email" 
				placeholder="name@example.com">
			<label 
				for="email">Email address</label>
		</div>
		<div class="form-floating">
			<input 
				type="password" 
				class="form-control"
				name="password" 
				id="password" 
				placeholder="Password" 
			/>
			<label for="password">Password</label>
		</div>
		<button 
			class="w-100 btn btn-lg btn-primary login-custom" 
			id="btnLogin"
			type="submit">Sign in</button>
	</form>
</main>