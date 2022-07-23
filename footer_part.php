    <?php if(!$this->user->hasLogin()): ?>
        <section id="links">
            <a target="_self" class="link" title="account" href="javascript:void(0)" onclick="VOID_Ui.toggleLoginForm()"><i class="voidicon-user"></i></a>
            <a class="link" target="_blank" title="music" onclick="playbtu()"><i class="voidicon-music-pause" id="music"></i><i class="voidicon-music-skip" id="music_skip" onclick="next(); event.stopPropagation();"style="display: none"></i></i></a>
            <?php
            foreach ($setting['link'] as $link) {
                echo "<a class=\"link\" title=\"{$link['name']}\" target=\"{$link['target']}\" href=\"{$link['href']}\"><i class=\"voidicon-{$link['icon']}\"></i></a>";
            }
            ?>
        </section>
    <?php endif; ?>