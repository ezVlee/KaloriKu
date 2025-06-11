<?php $__env->startSection('style-css'); ?>
    <link href="<?php echo e(asset('assets/css/wizard-style.css')); ?>"  rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="wrapper">
        <form action="<?php echo e(route('register')); ?>" method="post" id="wizard">
            <?php echo csrf_field(); ?>
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <h3>Information</h3>
                <div class="form-row">
                    <div class="form-holder">
                        <i class="zmdi zmdi-account"></i>
                        <input id="name" placeholder="Name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-holder">
                        <i class="zmdi zmdi-account"></i>
                        <input id="user_name" placeholder="Username" type="text" class="form-control <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="user_name" value="<?php echo e(old('user_name')); ?>" required autocomplete="user_name">

                        <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder">
                        <i class="zmdi zmdi-email"></i>
                        <input id="email" placeholder="Email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-holder">
                        <i class="zmdi zmdi-account-box-o"></i>
                        <input id="age" placeholder="Age" type="number" class="form-control <?php $__errorArgs = ['age'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="age" value="<?php echo e(old('age')); ?>" required autocomplete="age">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-holder">
                        <i class="zmdi zmdi-smartphone-android"></i>
                        <input id="password" placeholder="Password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-holder password">
                        <i class="zmdi zmdi-eye"></i>
                        <input id="password-confirm" placeholder="Password Confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </section>

            <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <h3>Details</h3>
                <div class="form-row">
                    <div class="form-holder w-50">
                        <input type="number" class="form-control" name="weight" id="weight" placeholder="Enter your weight" required>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                    <div class="form-holder w-50">
                        <div class="row">
                        <div class="col-md-3">
                            <input name="weight-unit" type="radio" value="2"> <span>lbs</span>
                        </div>
                        <div class="col-md-3">
                            <input name="weight-unit" type="radio" value="1">  <span>Kg</span>
                        </div>
                        </div>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder w-50">
                        <input type="number" class="form-control"  name="height" id="height" placeholder="Enter your height" required>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                    <div class="form-holder w-50">
                        <div class="row">
                            <div class="col-md-3">
                                <input name="height-unit" type="radio" value="2"> <span>Inches</span>
                            </div>
                            <div class="col-md-3">
                                <input name="height-unit" type="radio" value="1"> <span>cm</span>
                            </div>
                        </div>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder w-100">
                        <select name="sex" id="sex" class="form-control <?php $__errorArgs = ['sex'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <option value="" disabled selected>Select your gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>
                        <?php $__errorArgs = ['sex'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
            </section>

            <!-- SECTION 3 -->
            <h4></h4>
            <section>
                <h3 style="margin-bottom: 16px;">What is Your Goal</h3>
                <div class="form-row">
                    <div class="form-holder w-100">
                        <select class="form-select" name="activity_level" id="activity_level" class="form-control <?php $__errorArgs = ['activity_level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <option value="" disabled selected>Select your activity level</option>
                            <option value="1.2">Little to no exercise</option>
                            <option value="1.375">Light exercise (1−3 days per week)</option>
                            <option value="1.55">Moderate exercise (3−5 days per week)</option>
                            <option value="1.725">Heavy exercise (6−7 days per week)</option>
                            <option value="1.9">Very heavy exercise (twice per day, extra heavy workouts)</option>
                        </select>

                        <?php $__errorArgs = ['activity_level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-holder w-100">
                        <select name="gain_loss_amount" id="gain_loss_amount" class="form-select" required>
                            <option value="" disabled selected>Select your goal</option>
                            <option value="-1000">Lose 2 Pounds per Week</option>
                            <option value="-750">Lose 1.5 Pounds per Week</option>
                            <option value="-500">Lose 1 Pounds per Week</option>
                            <option value="-250">Lose 0.5 Pounds per Week</option>
                            <option value="0">Stay the Same Weight</option>
                            <option value="250">Gain 0.5 Pound per Week</option>
                            <option value="500">Gain 1 Pound per Week</option>
                            <option value="750">Gain 1.5 Pounds per Week</option>
                            <option value="1000">Gain 2 Pounds per Week</option>
                        </select>
                        <?php $__errorArgs = ['gain_loss_amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class="zmdi zmdi-lock-open"></i>
                    </div>
                </div>
            </section>

            <!-- SECTION 4 -->
            <h4></h4>
            <section>
                <button class="btn btn-primary" type="submit">Register</button>
            </section>
        </form>
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\otw\laravel-fitness-main\resources\views/auth/register.blade.php ENDPATH**/ ?>