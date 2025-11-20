def draw_grid():
    return [i*i if i > 1 else i+i for i in range(1, 17)]
    
print(draw_grid())