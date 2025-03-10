<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>
    <?php
        $contactUsDetails = \App\Models\ContactUsDetail::first();
    ?>
    <div class="container my-5">
        <div class="row ">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="margin-top: 50px;">
                        <div class="card-body">
                            <h5 class="card-title text-primary fs-3" style="text-align: left">NeXT SOLUTION</h5>
                            <p><?php echo e($contactUsDetails->address); ?></p>
                        </div>
                    </div>
                    <div class="card mb-3" style="margin-top: 60px;">
                        <div class="card-body">
                            <h5 class="card-title text-primary fs-3" style="text-align: left">CALL US:</h5>
                            <p><?php echo e($contactUsDetails->phone); ?></p>
                        </div>
                    </div>
                    <div class="card mb-3" style="margin-top: 60px;">
                        <div class="card-body">
                            <h5 class="card-title text-primary fs-3" style="text-align: left">WRITE US:</h5>
                            <p><?php echo e($contactUsDetails->email); ?></p>
                        </div>
                    </div>
                    <div class="d-flex gap-3" style="margin-top: 30px;">
                        <a href="#" class="text-primary fs-4"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-primary fs-4"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-danger fs-4"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Contact Form Section -->
                <div class="col-md-6">
                    <div class="contact-form bg-light p-4 rounded shadow-sm">
                        <h1 class="title text-center text-primary">Contact Us</h1>
                        <h2 class="subtitle text-center text-muted">We are here to assist you.</h2>

                        <form action="<?php echo e(url('/submit-form')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <!-- Name Input -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Enter your name" required>
                            </div>
                            <!-- Email Input -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" name="e-mail" id="email" class="form-control"
                                    placeholder="Enter your email address" required>
                            </div>
                            <!-- Phone Input -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Your Phone Number</label>
                                <input type="tel" name="phone" id="phone" class="form-control"
                                    placeholder="Enter your phone number" required>
                            </div>
                            <!-- Message Textarea -->
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea name="text" id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100">Get a Call Back</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="map-container mt-5">
                    <iframe
                        
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.0118856576836!2d70.803777!3d22.2393047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959b5601a9a7e85%3A0xb70d6f561d9cfaee!2sNeXT%20SOLUTION!5e0!3m2!1sen!2sin!4v1733203903876!5m2!1sen!2sin"
                        width="1270px" height="300px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\prince\New Project\prince (3) (1)\prince\resources\views/frontend/pages/contact-us.blade.php ENDPATH**/ ?>