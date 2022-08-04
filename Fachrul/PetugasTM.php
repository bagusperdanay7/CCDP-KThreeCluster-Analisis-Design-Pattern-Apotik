<?php

public abstract class Petugas{
	protected abstract void Bagian();
	protected abstract void Shift();
	public final void make(){
		Bagian();
		Shift();
		System.out.println("Diterima bagian");
		System.out.println("Masuk Pada Shift");
	}
}

public class Coffee extends Drink{

	@Override
	protected void Bagian(){
		System.out.println("Keamanan");
	}

	@Override
	protected void Shift(){
		System.out.println("Malam Hari");
	}
}

public class IceTea extends Drink{

	@Override
	protected void Bagian(){
		System.out.println("Perawat");
	}

	@Override
	protected void Shift(){
		System.out.println("Siang Hari");
	}
}

public static void main(String[] args){
	Petugas petugas1 = new Coffee();
	petugas1.make();
	System.out.println();
	Petugas petugas2 = new IceTea();
	petugas2.make();
}