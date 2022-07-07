
<?php $__env->startSection('content'); ?>
    <style>
        .act-btn{
      background:#f59e0b;
      display: block;
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      color: white;
      font-size: 30px;
      font-weight: bold;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      text-decoration: none;
      transition: ease all 0.3s;
      position: fixed;
      right: 30px;
      bottom:30px;
    }
.act-btn:hover{background: blue}
        
        a {
            text-decoration: none;
        }

        .action {
            display: flex;
        }
    </style>
    
    <?php if(!$file->isEmpty()): ?>
    <div style="padding-left: 18vw">
        <table class="styled-table">
            <tbody>
                <thead>
                    <tr style="background-color: #c8a0a0; color:#ffffff;">
                        <th>#</th>
                        <th>File Name</th>
                        <th>Shared</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php $__currentLoopData = $file; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $url = false;
                    if($item -> public) $url = true;
                    ?>
                    <tr>
                        <td><?php echo e($i+1); ?></td>
                        <td><a href="/view/<?php echo e($item->id); ?>"><?php echo e($item->name); ?></a></td>
                        <td>
                            <?php if($url): ?>
                            <a href="/share/<?php echo e($item->id); ?>">Yes</a>
                            <?php else: ?>
                            No
                            <?php endif; ?>
                        </td>
                        <td class="action">
                            <a href="#open-update<?php echo e($i); ?>">
                                <button type="submit"
                                style="width: 5.5vw;background-color:#0ea5e9;height:2vw;border-radius:1vw;border:none;color:white; margin-right: 0.8vw">Update</button>
                            </a>
                            
                            <div id="open-update<?php echo e($i); ?>" class="modal-window">
                                <div class="outside">
                                    <div class="inside" style="background-color: white;">
                                        <a href="#" title="Close" class="modal-close" style="margin-bottom: 5vh">X</a>
                                        <form action="/update/<?php echo e($item->id); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <input type="text" name="name" id="" value="<?php echo e($item->name); ?>">
                                            <select class="form-select" name="public">
                                                <?php if($url): ?>
                                                    <option value="1" selected>Yes</option>
                                                    <option value="0">No</option>
                                                    <?php else: ?>
                                                    <option value="1">Yes</option>
                                                    <option value="0" selected>No</option>
                                                    <?php endif; ?>
                                            </select>
                                            <button type="submit"
                                            style="width: 5.5vw;background-color:#28A745;height:2vw;border-radius:1vw;border:none;color:white">Save</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            <form action="/destroy/<?php echo e($item->id); ?>" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <div>
                                    <button type="submit"
                                    style="width: 5.5vw;background-color:#F05F40;height:2vw;border-radius:1vw;border:none;color:white">Delete</button>
                                </div>
                            </form>
        
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>
    <div class="empty">
        <h1>You don't have any files :(</h1>
        <img src="/storage/emptyfiles.png" alt="">
    </div>
    <?php endif; ?>
    <a href="#open-modal" class="act-btn">
        +
        </a>      
        <div id="open-modal" class="modal-window">
            <div class="outside">
                <div class="inside" style="background-color: white;">
                    <a href="#" title="Close" class="modal-close" style="margin-bottom: 5vh">X</a>
                    <h1>Upload Your File!</h1>
                    <small>Files should be in PDF</small>
                    <div><img src="/storage/uploadicon.png" alt="" height="200px" width="200px"></div>
                    <form action="/upload" method="POST" enctype="multipart/form-data"> <?php echo csrf_field(); ?><input type="file" accept="application/pdf" onchange="form.submit()" required name="file"></form>
            </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\VANESSA GIOVANI\Documents\GitHub\unidashboard\resources\views/file.blade.php ENDPATH**/ ?>