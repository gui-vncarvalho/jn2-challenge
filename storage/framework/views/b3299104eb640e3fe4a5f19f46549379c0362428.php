<?php $__env->startSection('content'); ?>
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Clientes</h1>
                    <a href="<?php echo e(route('admin.client.new')); ?>" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                    <tr>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ID</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Telefone</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">CPF</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Placa do Carro</th>
                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr <?php if($loop->even): ?>class="bg-gray-100"<?php endif; ?>>
                        <td class="px-4 py-3"><?php echo e($client->id); ?></td>
                        <td class="px-4 py-3"><?php echo e($client->name); ?></td>
                        <td class="px-4 py-3"><?php echo e($client->phone); ?></td>
                        <td class="px-4 py-3"><?php echo e($client->cpf); ?></td>
                        <td class="px-4 py-3"><?php echo e($client->plate); ?></td>
                        <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                            <a href="<?php echo e(route('admin.client.edit', $client->id)); ?>" class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                            <form method="post" action="<?php echo e(route('admin.client.delete', $client->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="mt-3 text-indigo-500 inline-flex items-center">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\myapp\resources\views/admin/clients.blade.php ENDPATH**/ ?>