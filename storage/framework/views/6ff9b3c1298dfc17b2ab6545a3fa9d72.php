<div class="bg-gray-50 py-8">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="mb-6 text-sm">
            <ol class="flex items-center gap-2">
                <li><a href="<?php echo e(route('home')); ?>" class="text-gray-500 hover:text-blue-600">Home</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-medium">Shop</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($category): ?>
                    <?php echo e(\App\Models\Category::where('slug', $category)->first()?->name); ?>

                <?php elseif($brand): ?>
                    <?php echo e(\App\Models\Brand::where('slug', $brand)->first()?->name); ?>

                <?php elseif($search): ?>
                    Search Results for "<?php echo e($search); ?>"
                <?php else: ?>
                    All Products
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </h1>
            <p class="text-gray-600">Showing <?php echo e($products->total()); ?> products</p>
        </div>

        <div class="lg:grid lg:grid-cols-4 lg:gap-8">
            
            <aside class="hidden lg:block">
                <div class="sticky top-24 space-y-6">
                    <!-- Active Filters -->
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($search || $category || $brand || $minPrice || $featured): ?>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="font-semibold text-gray-900">Active Filters</h3>
                                <button wire:click="clearFilters" 
                                        class="text-sm text-blue-600 hover:text-indigo-700">
                                    Clear All
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($search): ?>
                                    <span class="inline-flex items-center gap-1 bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                        Search: <?php echo e($search); ?>

                                        <button wire:click="$set('search', '')" class="hover:text-indigo-900">×</button>
                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($category): ?>
                                    <span class="inline-flex items-center gap-1 bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                        Category
                                        <button wire:click="$set('category', '')" class="hover:text-indigo-900">×</button>
                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($brand): ?>
                                    <span class="inline-flex items-center gap-1 bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                        Brand
                                        <button wire:click="$set('brand', '')" class="hover:text-indigo-900">×</button>
                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($featured): ?>
                                    <span class="inline-flex items-center gap-1 bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm">
                                        Featured
                                        <button wire:click="$set('featured', '')" class="hover:text-indigo-900">×</button>
                                    </span>
                                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                    <!-- Categories -->
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Categories</h3>
                        <ul class="space-y-2">
                            <li>
                                <button wire:click="$set('category', '')"
                                        class="w-full text-left px-3 py-2 rounded <?php echo e(!$category ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:bg-gray-50'); ?>">
                                    All Categories
                                </button>
                            </li>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <button wire:click="$set('category', '<?php echo e($cat->slug); ?>')"
                                            class="w-full text-left px-3 py-2 rounded <?php echo e($category === $cat->slug ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:bg-gray-50'); ?>">
                                        <?php echo e($cat->name); ?>

                                        <span class="text-sm text-gray-500">(<?php echo e($cat->products_count); ?>)</span>
                                    </button>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>

                    <!-- Brands -->
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Brands</h3>
                        <ul class="space-y-2 max-h-64 overflow-y-auto">
                            <li>
                                <button wire:click="$set('brand', '')"
                                        class="w-full text-left px-3 py-2 rounded <?php echo e(!$brand ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:bg-gray-50'); ?>">
                                    All Brands
                                </button>
                            </li>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $br): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <button wire:click="$set('brand', '<?php echo e($br->slug); ?>')"
                                            class="w-full text-left px-3 py-2 rounded <?php echo e($brand === $br->slug ? 'bg-indigo-50 text-indigo-700' : 'text-gray-700 hover:bg-gray-50'); ?>">
                                        <?php echo e($br->name); ?>

                                        <span class="text-sm text-gray-500">(<?php echo e($br->products_count); ?>)</span>
                                    </button>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </ul>
                    </div>

                    <!-- Price Range -->
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <h3 class="font-semibold text-gray-900 mb-3">Price Range</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-2">
                                <input type="number" 
                                       wire:model="minPrice"
                                       placeholder="Min"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                                <span class="text-gray-500">-</span>
                                <input type="number" 
                                       wire:model="maxPrice"
                                       placeholder="Max"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500">
                            </div>
                            <button wire:click="applyPriceFilter"
                                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 transition">
                                Apply
                            </button>
                        </div>
                    </div>
                </div>
            </aside>
            
            <div class="lg:col-span-3">
                
                <div class="bg-white p-4 rounded-lg shadow-sm mb-6 flex items-center justify-between flex-wrap gap-4">
                    <div class="flex items-center gap-4">
                        <label class="text-gray-700 font-medium">Sort By:</label>
                        <select wire:model.live="sort"
                                class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
                            <option value="newest">Newest</option>
                            <option value="price_low">Price: Low to High</option>
                            <option value="price_high">Price: High to Low</option>
                            <option value="name_asc">Name: A to Z</option>
                            <option value="name_desc">Name: Z to A</option>
                            <option value="popular">Most Popular</option>
                        </select>
                    </div>

                    <!-- Mobile Filter Button -->
                    <button class="lg:hidden bg-gray-100 px-4 py-2 rounded-lg">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </button>
                </div>
                
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($products->count() > 0): ?>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('product-card', ['product' => $product]);

$__key = $product->id;

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3216232864-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key);

echo $__html;

unset($__html);
unset($__key);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                    
                    <div class="mt-8">
                        <?php echo e($products->links()); ?>

                    </div>
                <?php else: ?>
                    <div class="bg-white p-12 rounded-lg shadow-sm text-center">
                        <svg class="mx-auto w-16 h-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">No products found</h3>
                        <p class="text-gray-600 mb-4">Try adjusting your filters or search terms</p>
                        <button wire:click="clearFilters" 
                                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition">
                            Clear Filters
                        </button>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\wamp64\www\e-commerce\resources\views/livewire/product-listing.blade.php ENDPATH**/ ?>