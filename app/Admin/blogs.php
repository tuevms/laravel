<?php

Admin::model('App\blogs')->title('')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with();
	$display->filters([

	]);
	$display->columns([
		Column::string('title')->label('Title'),
		Column::string('content')->label('Content'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::ckeditor('title', 'Title'),
		FormItem::ckeditor('content', 'Content'),
	]);
	return $form;
});