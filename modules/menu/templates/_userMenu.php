<?php
/*
 * This file is part of the Access to Memory (AtoM) software.
 *
 * Access to Memory (AtoM) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Access to Memory (AtoM) is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Access to Memory (AtoM).  If not, see <http://www.gnu.org/licenses/>.
 */
?>

<?php
/*
 * @ 2022.12.03
 * Authors: Ricardo Pinho (ricardo.pinho@gisvm.com)
 *
 */
?>

<?php if ($showLogin): ?>

  <div id="user-menu" data-toggle="tooltip" data-title="<?php echo __('Login button'); ?>">
    <button class="top-item" data-toggle="dropdown" data-target="#" aria-expanded="false">
      <?php /* <?php echo $menuLabels['login']; ?> */ ?>
    </button>

    <div class="top-dropdown-container">

      <div class="top-dropdown-arrow">
        <div class="arrow"></div>
      </div>

      <div class="top-dropdown-header">
        <h2><?php echo __('Have an account?') ?></h2>
      </div>

      <div class="top-dropdown-body">

        <?php echo $form->renderFormTag(url_for(array('module' => 'user', 'action' => 'login'))) ?>

          <?php echo $form->renderHiddenFields() ?>

          <?php echo $form->email->renderRow() ?>

          <?php echo $form->password->renderRow(array('autocomplete' => 'off')) ?>

          <button type="submit"><?php echo $menuLabels['login'] ?></button>

        </form>

      </div>

      <div class="top-dropdown-bottom"></div>

    </div>
  </div>

<?php elseif($sf_user->isAuthenticated()): ?>

  <div id="user-menu" data-toggle="tooltip" data-title="<?php echo __('Profile'); ?>">

    <button class="top-item" data-toggle="dropdown" data-target="#" aria-expanded="false">
    </button>

    <div class="top-dropdown-container">

      <div class="top-dropdown-arrow">
        <div class="arrow"></div>
      </div>

      <div class="top-dropdown-header">
	<?php /* <?php echo image_tag($gravatar, array('alt' => '')) ?>&nbsp; */ ?>
        <h2><?php echo __('Hi, %1%', array('%1%' => $sf_user->user->username)) ?></h2>
      </div>

      <div class="top-dropdown-body">

        <ul>
          <li><?php echo link_to($menuLabels['myProfile'], array(
            $sf_user->user, 'module' => 'user')) ?></li>
          <li><?php echo link_to($menuLabels['logout'], array(
            'module' => 'user', 'action' => 'logout')) ?></li>
        </ul>

      </div>

      <div class="top-dropdown-bottom"></div>

    </div>

  </div>

<?php endif; ?>
