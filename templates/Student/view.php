<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="student index content">    

    <div class="page-header">
        <h2 class="inflx"><?= __('View Student Deatils') ?></h2>
        <span class="rightbtn">
            <?= $this->Html->link(__('List Student'), ['action' => 'index'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>    
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'btn btn-primary']) ?>    
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'btn btn-primary']) ?>
        </span>
    </div>

<div class="row">    
    <div>
        <div class="student view content">            
            <div class="table-responsive">
                <div class="bs-component" >
                    <div class="container-fluid">
                       
                        <div class="head_txt">Student Details</div>
                            <table class="table table-hover">
                                <tr><td>  Name </td><td>:</td><td> <td><?= h($student->s_name) ?></td></tr>
                                <tr><td>  Grade </td><td>:</td><td><td><?= $this->Number->format($student->s_class) ?></td></tr>
                                <tr><td>  Date of Birth </td><td>:</td><td><td><?= h($student->s_dob) ?></td></tr>               
                                <tr><td>  Age </td><td>:</td><td><td><?= $this->Number->format($student->id) ?></td></tr>                
                                <tr><td>  Gender </td><td>:</td><td><td><?= h($student->s_gender) ?></td></tr>
                            </table>
                        </div>
                        
                    </div>
                </div>
             <div>
         </div>
    </div>
</div>
