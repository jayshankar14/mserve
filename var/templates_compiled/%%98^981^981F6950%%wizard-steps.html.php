<?php /* Smarty version 2.6.18, created on 2017-01-30 18:14:01
         compiled from C:%5CProgram+Files+%28x86%29%5CApache+Software+Foundation%5CApache2.2%5Chtdocs%5Cmserve/www/admin/templates/wizard-steps.html */ ?>
<ol class="wizard-steps">
    <?php $_from = $this->_tpl_vars['_aSteps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['steps'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['steps']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['aStep']):
        $this->_foreach['steps']['iteration']++;
?>
      <li class="<?php if ($this->_tpl_vars['aStep']['done']): ?>done <?php endif; ?><?php if ($this->_tpl_vars['aStep']['beforeCurrent']): ?>last-done <?php endif; ?><?php if (($this->_foreach['steps']['iteration'] <= 1)): ?>first <?php endif; ?><?php if (($this->_foreach['steps']['iteration'] == $this->_foreach['steps']['total']) && $this->_tpl_vars['aStep']['current']): ?>current-last <?php else: ?><?php if (($this->_foreach['steps']['iteration'] == $this->_foreach['steps']['total'])): ?>last<?php endif; ?><?php if ($this->_tpl_vars['aStep']['current']): ?>current <?php endif; ?><?php endif; ?>"><div class="body"><em><?php echo $this->_tpl_vars['aStep']['name']; ?>
</em></div></li>
    <?php endforeach; endif; unset($_from); ?>
</ol>