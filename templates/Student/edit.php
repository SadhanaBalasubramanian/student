<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>

<div class="student index content">    
    
    <div class="page-header">
        <h2 class="inflx"><?= __('Edit Student') ?></h2>
        <span class="rightbtn">
            <?= $this->Html->link(__('List Student'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>    
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'btn btn-primary']) ?>
        </span>
    </div>

<div class="row">    
    <div>
        <div class="student form content">
            <div class="table-responsive">
                <div class="bs-component" >

                     <div class="container-fluid">
                        <?= $this->Form->create($student,['class'=>'student_addfrm']) ?>

                        <fieldset>            
                            <div class="head_txt">Enter Student Details</div>   
                            <table class="table"> 
                               <tr><td>  Name </td><td>:</td><td> <?php echo $this->Form->input('s_name');?></td></tr>
                               <tr><td>  Date of Birth </td><td>:</td><td> <?php echo $this->Form->date('s_dob'); ?></td></tr>
                               <?php $options = [1 =>1, 2 =>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10]; 
                                     $gender_options=['Male','Female']
                                     ?>
                                <tr><td>  Grade </td><td>:</td><td><?php echo $this->Form->select('s_class', $options); ?></td></tr>
                                <tr><td>  Gender </td><td>:</td><td><?php 
                                      echo $this->Form->radio('s_gender',
                                        [['value' => 'Male', 'text' => 'Male', 'label' => ['class' => 'radio_styl']],
                                        ['value' => 'Female', 'text' => 'Female', 'label' => ['class' => 'radio_styl']],]); ?></td></tr>
                            </table>
                        </fieldset>

                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
