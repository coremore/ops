<?php
class FiltViewModel extends ViewModel {
    public $viewFields = array(
        'filts'=>array('owns','version','web'),
        'jump'=>array('name','site', '_on'=>'jump.id=filt.jumpid'),
    );
}