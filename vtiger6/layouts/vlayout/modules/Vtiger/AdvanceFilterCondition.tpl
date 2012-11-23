{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{strip}
<div class="row-fluid conditionRow">
	<span class="span4">
		<select class="{if empty($NOCHOSEN)}chzn-select{/if} row-fluid" name="columnname">
			<option value="none">{vtranslate('LBL_SELECT_FIELD',$MODULE)}</option>
			{foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE}
				<optgroup label='{vtranslate($BLOCK_LABEL, $SOURCE_MODULE)}'>
				{foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS}
					{assign var=FIELD_INFO value=$FIELD_MODEL->getFieldInfo()}
					{if !empty($COLUMNNAME_API)}
						{assign var=columnNameApi value=$COLUMNNAME_API}
					{else}
						{assign var=columnNameApi value=getCustomViewColumnName}
					{/if}
					<option value="{$FIELD_MODEL->$columnNameApi()}" data-fieldtype="{$FIELD_MODEL->getFieldType()}"
					{if $FIELD_MODEL->$columnNameApi() eq $CONDITION_INFO['columnname']}
						{assign var=FIELD_TYPE value=$FIELD_MODEL->getFieldType()}
						{$FIELD_INFO['value'] = $CONDITION_INFO['value']|escape}
						selected &nbsp;
					{/if}
					&nbsp; data-fieldinfo='{ZEND_JSON::encode($FIELD_INFO)}' >{vtranslate($FIELD_MODEL->get('label'), $SOURCE_MODULE)}</option>
				{/foreach}
				</optgroup>
			{/foreach}
		</select>
	</span>
	<span class="span3">
		<select class="{if empty($NOCHOSEN)}chzn-select{/if} row-fluid" name="comparator">
			 <option value="none">{vtranslate('LBL_NONE',$MODULE)}</option>
			{assign var=ADVANCE_FILTER_OPTIONS value=$ADVANCED_FILTER_OPTIONS_BY_TYPE[$FIELD_TYPE]}
			{foreach item=ADVANCE_FILTER_OPTION from=$ADVANCE_FILTER_OPTIONS}
				<option value="{$ADVANCE_FILTER_OPTION}"
				{if $ADVANCE_FILTER_OPTION eq $CONDITION_INFO['comparator']}
						selected
				{/if}
				>{vtranslate($ADVANCED_FILTER_OPTIONS[$ADVANCE_FILTER_OPTION])}</option>
			{/foreach}
		</select>
	</span>
	<span class="span4 fieldUiHolder">
		<input name="value" class="row-fluid" type="text" value="{$CONDITION_INFO['value']|escape}" />
	</span>
	<span class="hide">
		<!-- TODO : see if you need to respect CONDITION_INFO condition or / and  -->
		{if empty($CONDITION)}
			{assign var=CONDITION value="and"}
		{/if}
		<input type="hidden" name="column_condition" value="{$CONDITION}" />
	</span>
	 <span class="span1">
		<i class="deleteCondition icon-trash alignMiddle" title="{vtranslate('LBL_DELETE', $MODULE)}"></i>
	</span>
</div>
{/strip}