" Alias Test
"----------------Random Configuration------------------"
syntax enable "Enables syntax highlighting
set number 			"Enables line numbers
set clipboard=unnamed
if has('gui_running') 
      set background=dark
      colorscheme solarized
    else
      let g:solarized_termcolors=256
      set t_Co=256
      set background=dark
      colorscheme solarized
endif
if has("gui_macvim")
  " For macvim specifically
    set macligatures
endif
set guifont=Fira_Code:h17
set foldcolumn=0
set guioptions-=e " Eliminates black bar at the top
"set showtabline=2
set backspace=indent,eol,start 	"Enables backspace functionality
let mapleader = ',' 		"Default leader is \ but , is better
set whichwrap+=<,>,h,l,[,]
set wrap
set linebreak
set expandtab
set tabstop=2
set shiftwidth=2
set nolist  " list disables linebreak

"----------------Visuals------------------"

"Disables scrollbars
set guioptions-=l		
set guioptions-=L
set guioptions-=r
set guioptions-=R

" Transparent (Or Colored) Split Dividers
hi vertsplit guifg=bg guibg=bg

"----------------Search------------------"
set hlsearch
set incsearch

"----------------Split Management------------------"
set splitbelow
set splitright
map <Leader>1 :only<cr>
map <Leader>2 :vsp<cr>
map <Leader>3 :vsp<cr> :vsp<cr>
"Close current split
map <Leader>q :q!<cr> 
"Equalize windows
map <Leader>= <c-w>=<cr> 
"Equalize windows
map <Leader>+ :vsp <cr>
"Switch to previous window
map <Leader>` :b#<cr>

" Makes it easier to navigate 
nmap <C-J> <C-W><C-J>
nmap <C-K> <C-W><C-K>
nmap <C-H> <C-W><C-H>
nmap <C-L> <C-W><C-L>

"----------------Key Mappings (gtkm)------------------"
" Vim-specific General
nmap <Leader>ev :tabedit $MYVIMRC<cr>
nmap <Leader>es :tabedit ~/.vim/snippets/
" Session creation
nmap <Leader>ss :mks! ~/.vim/sessions/
nmap <Leader>ls :so ~/.vim/sessions/
nmap <Leader><space> :nohlsearch<cr>
" Indents
map <S-Tab> << 
"NERDTree + NERDCommenter
nmap <Leader>k :NERDTreeToggle<cr>
nmap <Leader>cc <Plug>NERDCommenterToggleComment<cr>
" ColorPicker mapping
map <Leader>cp :VCoolor<cr>
" Intuitive navigation bindings
nnoremap k gk
nnoremap j gj
" Trigger CTRLP with Cmd
nmap <D-p> :CtrlP<cr>
map <Leader>p :CtrlP<cr>
" Emmet
"Allows for tab to expand snippets while still allowing tab functionality
imap <expr> <tab> emmet#expandAbbrIntelligent("\<tab>") 
" Find and search next 
map <C-n><D-d> <nop>
map <D-d> <C-n>
" Find tag
nmap <Leader>f :tag<space>

"----------------Auto Commands------------------"
"Automatically source Vimrc file on save.
augroup autosourcing
	autocmd!
	autocmd BufWritePost .vimrc source %
augroup END

"----------------Vundle Stuff ------------------"
set nocompatible              " be iMproved, required
filetype off                  " required
filetype plugin on

" set the runtime path to include Vundle and initialize
set rtp+=~/.vim/bundle/Vundle.vim
call vundle#begin()
"call vundle#begin('~/some/path/here')

"  - Go To Plugins
"-----------------------------------------------------------
" let Vundle manage Vundle, required
Plugin 'VundleVim/Vundle.vim'
Plugin 'tpope/vim-vinegar'
Plugin 'scrooloose/nerdtree'
Plugin 'tpope/vim-surround'
Plugin 'kien/ctrlp.vim'
Plugin 'scrooloose/nerdcommenter'
Plugin 'mattn/emmet-vim'
Plugin 'terryma/vim-multiple-cursors'
Plugin 'pangloss/vim-javascript'
Plugin 'raimondi/delimitmate'
Plugin 'nathanaelkane/vim-indent-guides'
Plugin 'bling/vim-airline'
"Plugin 'scrooloose/syntastic'
Plugin 'bronson/vim-visual-star-search'
Plugin 'altercation/vim-colors-solarized'
Plugin 'MarcWeber/vim-addon-mw-utils'
Plugin 'tomtom/tlib_vim'
Plugin 'garbas/vim-snipmate'
Plugin 'KabbAmine/vCoolor.vim'
"---gtpl-----------------------------------------------------------
call vundle#end()            " required
filetype plugin indent on    " required

" Emmet 
let g:user_emmet_expandabbr_key = '<Tab>'

" NERDTree/NerdCommenter 
" None so far

" CtrlP Config + Mappings
if exists("g:ctrl_user_command") "Unbind random variable so that ignore works
  unlet g:ctrlp_user_command
endif
let g:ctrlp_custom_ignore = {
\ 'dir': 'node_modules\|vendor'
\ }
let g:ctrlp_match_window = 'top,order:ttb,min:1,max:10,results:30'
" ALlows CtrlP root directory to be adjusted by nerdtree
let g:NERDTreeChDirMode       = 2
let g:ctrlp_working_path_mode = 'rw'

" Syntastic Config (Recommended Settings)
set statusline+=%#warningmsg#
set statusline+=%{SyntasticStatuslineFlag()}
set statusline+=%*

let g:syntastic_always_populate_loc_list = 1
let g:syntastic_auto_loc_list = 1
let g:syntastic_check_on_open = 1
let g:syntastic_check_on_wq = 0

" Indent Guides Config 
let g:indent_guides_auto_colors = 1

" Snipmate Config

