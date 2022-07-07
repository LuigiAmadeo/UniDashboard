
<?php $__env->startSection('content'); ?>


        <div class="leftContainer" style="width:40vw;
                                height:20vw;
                                border: 1vw solid #FFFFFF; 
                                border-radius:0.7vw;
                                color:black;
                                margin-top: 2vw;
                                margin-left: 2.8vw;
                                font-family: 'Montserrat';
                                color:#708090;
                                box-shadow: 0.5vw 0.5vw 1vw 0.8vw #C0C0C0;">

            <div class="header" style="display: flex;align-items:center">
                <h2 style="margin-left: 2vw">Upcoming Activities</h2>
                <a href="/agenda/<?php echo e(Auth::user()->id); ?>" style="color:blue; margin-top:1vw;margin-left:1vw;">See all</a>
            </div>


            <?php
                $count = 0;
            ?>
            <div>

                <div class="agenda_container">
                    <table class="styled-table2" style="font-size:0.9em ">
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <?php $__empty_1 = true; $__currentLoopData = $agenda_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php
                                $count++;
                            ?>
                            <?php if($count <= 5): ?>
                                <tr>
                                    <td>
                                        <?php
                                            $time = $item->time;
                                            echo number_format((float) $time, 2, '.', '');
                                        ?>
                                    </td>
                                    <td style="padding: 12px 15px;"><?php echo e($item->agenda); ?></td>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="empty" style="margin-left: -19vw; margin-top: 1vw">
                            No Agendas For Today.
                        </div>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>

            <div class="rightContainer" style="width:40vw;
                                        height:20vw;
                                        border: 1vw solid #FFFFFF; 
                                        border-radius:0.7vw;
                                        color:black;
                                        margin-top: -20vw;
                                        margin-left: 45.6vw;
                                        font-family: 'Montserrat';
                                        color:#708090;
                                        box-shadow: 0.5vw 0.5vw 1vw 0.8vw #C0C0C0;">

                <div class="header" style="display: flex;align-items:center;">
                    <h2 style="margin-left: 2vw">Recent Files Uploaded</h2>
                    <a href="/file" style="color:blue; margin-top:1vw;margin-left:1vw;">See all</a>
                </div>
                <?php if(!$file->isEmpty()): ?>
                    <div>
                        <table class="styled-table2">
                            <thead>
                                <tr>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $url = false;
                                        if ($item->public) {
                                            $url = true;
                                        }
                                    ?>
                                    <tr>
                                        <td><?php echo e($i + 1); ?></td>
                                        <td><a href="/view/<?php echo e($item->id); ?>"
                                                style="text-decoration: none"><?php echo e($item->name); ?></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="empty" style="margin-left: -19vw; margin-top: 1vw">
                        You don't have any files.
                    </div>
                <?php endif; ?>
            </div>

            <div>
                <img src="/storage/dashBottom.png" style="margin-top: 1.3vw;margin-left: 29vw ;width: 30vw; height: 18vw" alt="">
            </div>

        
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VANESSA GIOVANI\Documents\GitHub\unidashboard\resources\views/dashboard.blade.php ENDPATH**/ ?>