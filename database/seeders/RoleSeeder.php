<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'empleado']);

        Permission::create(['name' => 'admin.index','descripcion' => 'ver inicio'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.cliente.index','descripcion' => 'ver lista de clientes'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.cliente.destroy','descripcion' => 'eliminar cliente'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.cliente.edit','descripcion' => 'editar cliente'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.cliente.updete','descripcion' => 'guardar ciente'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.proveedor.index','descripcion' => 'ver lista de proveedoress'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.proveedor.destroy','descripcion' => 'eliminar prveedor'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.proveedor.edit','descripcion' => 'editar proveedor'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.proveedor.updete','descripcion' => 'guardarproveedor'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.tipo.index','descripcion' => 'ver lista de tipos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tipo.destroy','descripcion' => 'eliminar tipo'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tipo.edit','descripcion' => 'editar tipo'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tipo.updete','descripcion' => 'guardar tipo'])->syncRoles([$role1, $role2]);
        



    }
}
