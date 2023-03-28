<?php if (session()->get('isLoggedIn') == true): ?>
                <?php if ($_SESSION['role'] == 'admin'): ?>
                    <?= $this->include('content-admin'); ?>
                <?php elseif ($_SESSION['role'] == 'member'): ?>
                    <?= $this->include('member'); ?>
                <?php endif; ?>
            <?php endif; ?>