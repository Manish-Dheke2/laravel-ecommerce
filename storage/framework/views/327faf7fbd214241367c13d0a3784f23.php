<div class="group relative bg-white rounded-lg shadow-sm hover:shadow-lg transition duration-300 overflow-hidden">
    <a href="<?php echo e(route('products.show', $product->slug)); ?>" class="block">
        <!-- Product Image -->
        <div class="aspect-square overflow-hidden bg-gray-200">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->primaryImage): ?>
                <img src="<?php echo e(asset('storage/' . $product->primaryImage->image_path)); ?>" 
                     alt="<?php echo e($product->name); ?>"
                     class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
            <?php else: ?>
                <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-300 to-gray-400">
                    <span class="text-6xl text-gray-500"><?php echo e(substr($product->name, 0, 1)); ?></span>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <!-- Badges -->
        <div class="absolute top-2 left-2 flex flex-col gap-2">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->is_featured): ?>
                <span class="bg-yellow-500 text-white text-xs font-semibold px-2 py-1 rounded">
                    Featured
                </span>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->discount_percentage > 0): ?>
                <span class="bg-red-500 text-white text-xs font-semibold px-2 py-1 rounded">
                    -<?php echo e($product->discount_percentage); ?>%
                </span>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->stock_status === 'out_of_stock'): ?>
                <span class="bg-gray-800 text-white text-xs font-semibold px-2 py-1 rounded">
                    Out of Stock
                </span>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <!-- Product Info -->
        <div class="p-4">
            <!-- Category -->
            <p class="text-xs text-gray-500 mb-1"><?php echo e($product->category->name); ?></p>

            <!-- Product Name -->
            <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition">
                <?php echo e($product->name); ?>

            </h3>

            <!-- Rating -->
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->reviews_count > 0): ?>
                <div class="flex items-center gap-1 mb-2">
                    <div class="flex text-yellow-400">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php for($i = 1; $i <= 5; $i++): ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($i <= floor($product->average_rating)): ?>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            <?php else: ?>
                                <svg class="w-4 h-4 fill-current text-gray-300" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                </svg>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php endfor; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    <span class="text-xs text-gray-600">(<?php echo e($product->reviews_count); ?>)</span>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <!-- Price -->
            <div class="flex items-center gap-2">
                <span class="text-xl font-bold text-gray-900">
                    $<?php echo e(number_format($product->price, 2)); ?>

                </span>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->compare_price): ?>
                    <span class="text-sm text-gray-500 line-through">
                        $<?php echo e(number_format($product->compare_price, 2)); ?>

                    </span>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </a>

    <!-- Add to Cart Button -->
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($product->stock_status === 'in_stock'): ?>
        <div class="p-4 pt-0">
            <button wire:click="addToCart"
                    class="w-full cursor-pointer bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition font-medium">
                Add to Cart
            </button>
        </div>
    <?php else: ?>
        <div class="p-4 pt-0">
            <button disabled
                    class="w-full bg-gray-300 text-gray-500 py-2 px-4 rounded-lg cursor-not-allowed font-medium">
                Out of Stock
            </button>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div><?php /**PATH C:\wamp64\www\e-commerce\resources\views/livewire/product-card.blade.php ENDPATH**/ ?>