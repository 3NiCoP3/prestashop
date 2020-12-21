{*
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="panel">
	<table style="width:100%; border-collapse:separate; border-spacing:5px">
		<thead>
		<tr>
			<th>Image</th>
			<th>Description</th>
			<th>Date de création</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		{foreach $result as $data}
			<tr>
				<td><img src="{$data.picture_path}" alt="" height=50 width=50></img></td>
				<td>{$data.description}</td>
				<td>{$data.date_create}</td>
				<td><input class="btn btn-danger btn-sm" type="submit" name="submitDelete" value="{l s='Delete' d='Shop.Theme.Actions'}"></td>
			</tr>
		{/foreach}
		</tbody>
	</table>
</div>




<div class="panel">
	<h3><i class="icon icon-credit-card"></i> {l s='TargetWeb' mod='targetWeb'}</h3>
	<p>
		<strong>{l s='Here is my new generic module!' mod='targetWeb'}</strong><br />
		{l s='Thanks to PrestaShop, now I have a great module.' mod='targetWeb'}<br />
		{l s='I can configure it using the following configuration form.' mod='targetWeb'}
	</p>
	<br />
	<p>
		{l s='This module will boost your sales!' mod='targetWeb'}
	</p>
</div>

<div class="panel">
	<h3><i class="icon icon-tags"></i> {l s='Documentation' mod='targetWeb'}</h3>
	<p>
		&raquo; {l s='You can get a PDF documentation to configure this module' mod='targetWeb'} :
		<ul>
			<li><a href="#" target="_blank">{l s='English' mod='targetWeb'}</a></li>
			<li><a href="#" target="_blank">{l s='French' mod='targetWeb'}</a></li>
		</ul>
	</p>
</div>
