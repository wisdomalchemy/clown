<?php

class ManageItemsController extends BaseController {

	public function getItems()
	{
		$itemNumber = Session::get('itemSearchItemNumber') . '%';
		$itemName = '%' . Session::get('itemSearchItemName') . '%';
		$slotLocation = Session::get('itemSearchSlotLocation') . '%';
		$packSize = Session::get('itemSearchPackSize') . '%';

		$items = Item::allByFilter($itemNumber, $itemName, $slotLocation, $packSize);
		return View::make('manageItemsView')->with('allItems', $items);
	}

	public function postItems()
	{
		$itemNumber = Input::get('itemNumber');
		$itemName = Input::get('itemName');
		$slotLocation = Input::get('slotLocation');
		$packSize = Input::get('packSize');
		
		Session::put('itemSearchItemNumber', $itemNumber);
		Session::put('itemSearchItemName', $itemName);
		Session::put('itemSearchSlotLocation', $slotLocation);
		Session::put('itemSearchPackSize', $packSize);

		return Redirect::to('items');
	}

}