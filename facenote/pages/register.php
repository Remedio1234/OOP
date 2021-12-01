    
<main class="form-signin">
    <form method="post" id="frmSubmit">
        <img 
            class="mb-4" 
            src="assets/images/bootstrap-logo.svg" 
            alt="logo" 
            width="72" 
            height="57" 
        />
        <h1 class="h3 mb-3 fw-normal txt-register-color">Register Account</h1>
        <div class="form-floating">
            <input 
                type="text" 
                name="name"
                id="name"
                class="form-control mt-2"  
                placeholder="ex.jose rizal" 
            />
            <label >Name</label>
        </div>
        <div class="form-floating">
            <input 
                type="email" 
                name="email"
                id="email"
                class="form-control mt-2" 
                placeholder="name@example.com" 
            />
            <label>Email address</label>
        </div>
        <div class="form-floating">
            <input 
                type="password" 
                class="form-control mt-2" 
                name="password"
                id="password"
                placeholder="Password"
            />
            <label>Password</label>
        </div>
        <div class="form-floating">
            <input 
                type="password" 
                name="confirm_password"
                id="confirm_password"
                class="form-control" 
                placeholder="Confirm Password" 
            />
            <label>Confirm Password</label>
        </div>
        <input 
            type="hidden" 
            name="_action" 
            value="register" 
        />
        <button 
            class="w-100 btn btn-lg btn-primary" 
            type="submit">Register</button>
    </form>
</main>