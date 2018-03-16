<style>
    .skill {
        background-image: url('<?= $plugin->getPluginURL() . '/assets/sprite.jpg' ?>');
    }
</style>

<?= MessageBox::info(_('Willkommen Neuling! Beginne deinen Weg durch Stud.IP!')) ?>

<div class="skillpoints">
    <?= _('Skillpoints verfügbar') ?>:
    <span id="skillpoints"></span>
</div>

<div id="st"></div>
<? $pos = 200 ?>

<script type="text/javascript">

    $(function(){
/*
        skill('html')
                .current(0)
                .max(3)
                .pos(400, <?= $pos ?>)
                .sprite(0,0)
                .sprites({2:[1,0],3:[2,0]})
                .name('Trails')
                .hint('Sprich mit dem Erfinder von Trails!')
                .hint('Der Erfinder von Trails lautet...', 1)
                .hint('Der Erfinder von Trails lautet...', 2)
                .hint('Der Erfinder von Trails lautet...', 3)
        .$('#st');

        skill('css')
                .pos(400, <?= $pos + 110 ?>)
                .sprite(6,0)
                .sprites({2:[7,0],4:[8,0]})
                .max(4)
                .name('CSS')
                .mustHave('html')
                .hint('The art of the markup')
                .hint('Oh, come on. Everybody knows CSS.',0)
        .$('#st');

        skill('preprocessors')
                .pos(400, <?= $pos + 220 ?>)
                .sprite(4,4)
                .max(3)
                .dependency({1:{'css':1,'html':1},2:{'css':3}})
                .sprites({2:[5,4],3:[6,4]})
                .name('CSS Preprocessors')
                .hint('LESS, SASS and others')
                .hint('<i>First level of skill means that the hero knows how to set up the preprocessors and use some of their basics.</i>',0)
                .hint('The hero knows how to set up the preprocessors and use some of their basics (variables, imports and simple mixins)',1)
                .hint('<i>Next level means that the hero knows how to use parametric mixins and transformations</i>',1)
                .hint('The hero knows how to set up the preprocessors and is aware of their advanced use (variables, mixins and functions)',2)
                .hint('<i>Next level means that the hero utilizes various mixin libraries (LESSHat, Compass, etc)</i>',2)
                .hint('The hero knows how to set up the preprocessors and is aware of their advanced use (variables, mixins and functions) as well as mixin libraries.',3)
        .$('#st'); */

        /*
        skill('yii').pos(700, <?= $pos ?>).abbr_color('#88f').$('#st');
        skill('php').pos(785, <?= $pos + 85 ?>).abbr('Zend').$('#st');
        */

        skilltree.language.reqTitle = "Für Level {0} benötigst du:";
        skilltree.language.req = '<h4>{1}</h4><ul class="reqs commamenu">{0}</ul>',
        skilltree.language.levelTitle = "Level {1} {0}";
        skilltree.updateSkillPoints(10);
        skilltree.init($('#st'));
        skilltree.buildFromJSON('<?= $controller->url_for('index/get_skilltree') ?>');
        // console.log(skilltree.buildJSON());
    });

</script>
