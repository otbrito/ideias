#!/usr/bin/env python3
# -*- coding: utf-8 -*-
"""
Created on Wed Jun 22 20:40:19 2022

@author: otavio
"""


from itertools import combinations
import pandas as pd

U = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25]
AC = combinations(U, 15)

for i in list(AC):
	print (i)

U = list(range(1,26))
AC = combinations(U, 15)

AC_LIST = list(AC)
DF = pd.DataFrame(AC_LIST)
DF.to_csv('cenário.csv')