<?php

namespace DoctrineExtensions\Query\Mysql;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;

class Log2 extends FunctionNode
{
    public $arithmeticExpression;

    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker)
    {
        return 'LOG2(' . $sqlWalker->walkSimpleArithmeticExpression(
            $this->arithmeticExpression
        ) . ')';
    }

    public function parse(\Doctrine\ORM\Query\Parser $parser)
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->arithmeticExpression = $parser->SimpleArithmeticExpression();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }
}
