<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nm_aluno',
            'ds_cpf',
            'dt_nascimento',
            'ds_sexo',
            'ds_identidade',
            'ds_responsaveis',
            'ds_estado',
            'ds_cidade',
            'ds_endereco',
            'ds_cep',
            'ds_email:email',
            'ds_profissao',
            'ds_telefone1',
            'ds_telefone2',
            'ds_whatsapp',
            'id_convenio',
        ],
    ]) ?>

</div>
