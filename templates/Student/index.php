<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student[]|\Cake\Collection\CollectionInterface $student
 */
?>
<div class="student index content">    
    <div class="page-header"><h2 class="inflx"><?= __('Student List') ?></h2>
    <span class="rightbtn"><?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?></span>
</div>
    <div class="table-responsive">
    <div class="bs-component" >
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr class="table-primary">                    
                    <th><?= $this->Paginator->sort('Name') ?></th>
                    <th><?= $this->Paginator->sort('Grade') ?></th>
                    <th><?= $this->Paginator->sort('DOB') ?></th>
                    <th><?= $this->Paginator->sort('Age') ?></th>                    
                    <th><?= $this->Paginator->sort('Gender') ?></th>
                    <th class="actions text-center" colspan=3><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php if(!empty($student)){?>
                <?php foreach ($student as $student): ?>
                <tr>                    
                    <td><?= h($student->s_name) ?></td>
                    <td><?= $this->Number->format($student->s_class) ?></td>
                    <td><?= h($student->s_dob) ?></td>
                    <?php   
                            $today = date("Y-m-d");
                            $diff = date_diff(date_create($student->s_dob), date_create($today));
                            $age=$diff->format('%y')?>
                    <td><?= $age ?></td>                    
                    <td><?= h($student->s_gender) ?></td>
                    <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?></td>
                    <td class="actions"> <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?></td>
                    <td class="actions"> <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </td>
                </tr>
                <?php endforeach; ?>
                <?php } else { ?>
                <tr><td colspan=8  class="text-primary centalign">No student to Display</td></tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div>
</div>
