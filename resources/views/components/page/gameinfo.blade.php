<div {{ $attributes->class([
    'flex justify-between mt-20
     laptop:flex-row 
     tablet-xl:flex-col 
     tablet:flex-col 
     phone:flex-col 
     zero:flex-col'
]) }}>
    {{ $slot }}
</div>
