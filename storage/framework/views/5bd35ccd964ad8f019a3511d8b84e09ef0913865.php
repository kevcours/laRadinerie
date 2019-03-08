    <!-- Material form login -->
    <div class="divBackground" id="connect">

        <div class=" card formulaire-insc md-col6" id="cardConnect">
            <div class="card-header green  text-center py-3 headerForm">
                <div id="loginTexte" class="divTextForm borderWhite-B">
                    <a href="#" class="white-text z-depth-0">
                        <strong>Connexion</strong>
                    </a>
                </div>
                <div id="registerTexte" class="divTextForm">
                    <a href="#"  class="white-text">
                        <strong>Inscription</strong>
                    </a>
                </div>
                <img  id ="fermerForm"class="fermerInsc" src="/img/croix.png" alt="croix fermer formulaire">
            </div>
            <!--Card content-->
            <div id="login"class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="<?php echo e(route('login')); ?>" method='POST'>
                <?php echo e(csrf_field()); ?>

                <!-- Email -->
                <div class="md-form form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <input name="mailUtilisateur" type="email" id="mailUtilisateur" class="form-control" required autofocus>
                    <label for="materialLoginFormEmail">E-mail</label>
                    <?php if($errors->has('email')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div class="md-form form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <input name="password" type="password" id="password" class="form-control" required>
                    <label for="materialLoginFormPassword">Mot de passe</label>
                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="d-flex justify-content-around">
                    <div>
                    <!-- Remember me -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialLoginFormRemember" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="materialLoginFormRemember">Se souvenir de moi</label>
                    </div>
                    </div>
                    <div>
                    <!-- Forgot password -->
                    <a href="<?php echo e(route('password.request')); ?>">Mot de passe oublié?</a>
                    </div>
                </div>

                <!-- Sign in button -->
                <button class="btn green btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Se connecter</button>

                <!-- Register -->
                <p>Pas encore membre ?
                    <a href="">S'inscrire</a>
                </p>

                <!-- Social login -->
                <p>ou connecte toi avec :</p>
                <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fab fa-google"></i>
                </a>

                </form>
                <!-- Form -->

            </div>
            <div id="register" class="card-body px-lg-5 pt-0 vanish">

            <!-- Form -->
                <form class="text-center" style="color: #757575;" action="<?php echo e(route('register')); ?>" method='POST'>
                <?php echo e(csrf_field()); ?>

                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <input name="prenomInsc" type="text" id="prenomInsc" class="form-control">
                                <label for="materialRegisterFormFirstName">Prénom</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <div class="md-form">
                                <input name="nomInsc" type="text" id="nomInsc" class="form-control">
                                <label for="materialRegisterFormLastName">Nom</label>
                            </div>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <input name="mailUtilisateur" type="email" id="mailUtilisateur" class="form-control">
                        <label for="materialRegisterFormEmail">E-mail</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input name="passwordInsc" type="password" id="passwordInsc" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword">Mot de passe</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                        </small>
                    </div>
                    <!-- role -->
                    <div class="md-form">
                        <select id="role" name="role" class="green" aria-describedby="role">
                            <option value="client">Client</option>
                            <option value="responsable">Responsable</option>
                        </select>
                    </div>

                    <!-- Newsletter -->
                    <div class="form-check">
                        <input type="checkbox" name="Newsletter" class="form-check-input" id="Newsletter">
                        <label class="form-check-label" for="materialRegisterFormNewsletter">Abonnez vous a nos newsletter !</label>
                    </div>

                    <!-- Sign up button -->
                    <button class="btn green btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">S'inscrire</button>

                    <!-- Social register -->
                    <p>ou inscrivez vous avec :</p>

                    <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fab fa-google"></i>
                    </a>

                    <!-- Terms of service -->
                    <p>En cliquant sur
                        <em>S'inscrire</em> vous acceptez nos
                        <a href="" target="_blank">conditions d'utilisations</a>

                </form>
                <!-- Form -->
            </div>
        </div>

    </div>
    
    <!-- Material form login -->