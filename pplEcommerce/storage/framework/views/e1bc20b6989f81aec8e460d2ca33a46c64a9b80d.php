<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, []); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <main id="main" class="main-site left-sidebar">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="/" class="link">home</a></li>
                    <li class="item-link"><span>Register</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="register-form form-item ">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']]); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <form class="form-stl" action="<?php echo e(route('register')); ?>" name="frm-login" method="POST" >
                                    <?php echo csrf_field(); ?>
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Buat Akun</h3>
                                        <h4 class="form-subtitle">ISI DATA DIRI</h4>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-lname">Nama Lengkap*</label>
                                        <input type="text" id="frm-reg-lname" name="name" placeholder="Nama Lengkap" :value="name" required autofocus autocomplete="name">
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-reg-email">Email*</label>
                                        <input type="email" id="frm-reg-email" name="email" placeholder="Alamat Email" :value="email">
                                    </fieldset>
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Login Information</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half left-item ">
                                        <label for="frm-reg-pass">Password *</label>
                                        <input type="password" id="frm-reg-pass" name="password" placeholder="Password" required autocomplete="new-password">
                                    </fieldset>
                                    <fieldset class="wrap-input item-width-in-half ">
                                        <label for="frm-reg-cfpass">Confirm Password *</label>
                                        <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                    </fieldset>
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </main>
    <!--main area-->
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>

<?php /**PATH /opt/lampp/htdocs/pplEcommerce/resources/views/auth/register.blade.php ENDPATH**/ ?>