<?php


class Categoria {

	public function verCategorias() {

		return ORM::for_table('categorias')->find_many();

	}

}