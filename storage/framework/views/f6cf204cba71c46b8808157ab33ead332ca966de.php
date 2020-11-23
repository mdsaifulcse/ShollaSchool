

<?php $__env->startSection('title'); ?>
    Students Summary | Sholla School and College
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="students-info">
                    <div class="students-info-heading">
                        <h3>School & College Students Summery - <?php echo date('Y');?></h3>
                    </div>
                    <div class="students-info-body">
                        <table class="table table-bordered students-hover">
                            <thead>
                            <tr class="bg-info">
                                <th>Sl No</th>
                                <th>Class</th>
                                <th>Students Number</th>
                                <th class="text-center">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Six &raquo; <span class="badge">Shapla</span></td>
                                <td>100</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Six &raquo; <span class="badge">Doyel</span></td>
                                <td>100</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Six &raquo; <span class="badge">Polash</span></td>
                                <td>100</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Six &raquo; <span class="badge">Golap</span></td>
                                <td>100</td>
                                <td></td>
                            </tr>
                            <tr class="bg-warning">
                                <td>5</td>
                                <td>
                                    Total Students of Class <span class="badge">Six</span> &raquo;
                                </td>
                                <td></td>
                                <td class="text-center"><strong class="label label-warning">400</strong></td>
                            </tr>
                            <!-- ========================== -->

                            <tr>
                                <td>6</td>
                                <td>Seven &raquo; <span class="badge">Padma</span></td>
                                <td>80</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Seven &raquo; <span class="badge">Meghna</span></td>
                                <td>75</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Seven &raquo; <span class="badge">Jamuna</span></td>
                                <td>70</td>
                                <td></td>
                            </tr>

                            <tr class="bg-warning">
                                <td>9</td>
                                <td>
                                    Total Students of Class <span class="badge">Seven</span> &raquo;
                                </td>
                                <td></td>
                                <td class="text-center"><span class="label label-warning">225</span></td>
                            </tr>
                            <!-- ========================== -->
                            <tr>
                                <td>10</td>
                                <td>Eight &raquo; <span class="badge">Padma</span></td>
                                <td>80</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Eight &raquo; <span class="badge">Meghna</span></td>
                                <td>75</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Eight &raquo; <span class="badge">Jamuna</span></td>
                                <td>70</td>
                                <td></td>
                            </tr>

                            <tr class="bg-warning">
                                <td>13</td>
                                <td>
                                    Total Students of Class <span class="badge"> Eight</span> &raquo;
                                </td>
                                <td></td>
                                <td class="text-center"><span class="label label-warning ">225</span></td>
                            </tr>

                            <!--===========================-->
                            <tr class="bg-info">
                                <th></th>
                                <th></th>
                                <th>Total Students </th>
                                <th class="bg-primary text-center">  910   </th>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php echo $__env->make('front.includes.related', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>